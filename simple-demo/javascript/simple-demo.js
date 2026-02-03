/**
 * Kledo API Demo - JavaScript/Node.js (tanpa npm, Node 18+)
 * Jalankan: node simple-demo.js
 */

const API_HOST = 'http://xxx.api.kledo.com/api/v1';
const ACCESS_TOKEN = 'your_token_here';

const url = `${API_HOST}/finance/accounts?sort_by=name&order_by=asc&per_page=5`;
const res = await fetch(url, {
  headers: { 'Accept': 'application/json', 'Authorization': `Bearer ${ACCESS_TOKEN}` }
});
const data = await res.json();
console.log(JSON.stringify(data, null, 2));

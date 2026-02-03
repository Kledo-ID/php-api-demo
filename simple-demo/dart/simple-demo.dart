// Kledo API Demo - Dart
// Jalankan: dart run simple-demo.dart

import 'dart:convert';
import 'dart:io';

void main() async {
  const apiHost = 'http://xxx.api.kledo.com/api/v1';
  const accessToken = 'your_token_here';

  final client = HttpClient();
  final req = await client.getUrl(Uri.parse(
      '$apiHost/finance/accounts?sort_by=name&order_by=asc&per_page=5'));
  req.headers.set('Accept', 'application/json');
  req.headers.set('Authorization', 'Bearer $accessToken');

  final res = await req.close();
  final body = await res.transform(utf8.decoder).join();
  final json = jsonDecode(body);
  print(const JsonEncoder.withIndent('  ').convert(json));
}

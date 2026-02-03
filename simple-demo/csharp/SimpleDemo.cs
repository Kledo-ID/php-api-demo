// Kledo API Demo - C# (.NET 6+)
// Jalankan: dotnet run
// Atau: csc SimpleDemo.cs && SimpleDemo.exe

using System.Net.Http.Headers;
using System.Text.Json;

var apiHost = "http://xxx.api.kledo.com/api/v1";
var accessToken = "your_token_here";

using var client = new HttpClient();
client.DefaultRequestHeaders.Accept.Add(new MediaTypeWithQualityHeaderValue("application/json"));
client.DefaultRequestHeaders.Authorization = new AuthenticationHeaderValue("Bearer", accessToken);

var res = await client.GetAsync($"{apiHost}/finance/accounts?sort_by=name&order_by=asc&per_page=5");
var json = await res.Content.ReadAsStringAsync();
var doc = JsonDocument.Parse(json);
Console.WriteLine(JsonSerializer.Serialize(doc.RootElement, new JsonSerializerOptions { WriteIndented = true }));

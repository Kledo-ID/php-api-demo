// Kledo API Demo - Rust
// Jalankan: cargo run

use reqwest::header::{ACCEPT, AUTHORIZATION};

#[tokio::main]
async fn main() -> Result<(), Box<dyn std::error::Error>> {
    let api_host = "http://xxx.api.kledo.com/api/v1";
    let access_token = "your_token_here";

    let client = reqwest::Client::new();
    let res = client
        .get(format!("{}/finance/accounts?sort_by=name&order_by=asc&per_page=5", api_host))
        .header(ACCEPT, "application/json")
        .header(AUTHORIZATION, format!("Bearer {}", access_token))
        .send()
        .await?;

    let json: serde_json::Value = res.json().await?;
    println!("{}", serde_json::to_string_pretty(&json)?);
    Ok(())
}

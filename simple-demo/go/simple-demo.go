// Kledo API Demo - Go (tanpa dependency eksternal)
// Jalankan: go run simple-demo.go

package main

import (
	"encoding/json"
	"fmt"
	"net/http"
	"os"
)

func main() {
	apiHost := "http://xxx.api.kledo.com/api/v1"
	accessToken := "your_token_here"

	req, _ := http.NewRequest("GET", apiHost+"/finance/accounts?sort_by=name&order_by=asc&per_page=5", nil)
	req.Header.Set("Accept", "application/json")
	req.Header.Set("Authorization", "Bearer "+accessToken)

	res, err := http.DefaultClient.Do(req)
	if err != nil {
		fmt.Fprintln(os.Stderr, err)
		return
	}
	defer res.Body.Close()

	var data interface{}
	json.NewDecoder(res.Body).Decode(&data)
	out, _ := json.MarshalIndent(data, "", "  ")
	fmt.Println(string(out))
}

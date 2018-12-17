package main

import (
    "fmt"
    "strings"
    "os"
    "bufio"
    "io"
)

func main() {
    var (
        n int
        book map[string]string
        parts, queries []string
        query string
    )

    reader := bufio.NewReaderSize(os.Stdin, 1024 * 1024)
    book = make(map[string]string)

    //Enter your code here. Read input from STDIN. Print output to STDOUT
    fmt.Scan(&n)

    if (n < 1) || (n > 100000) {
        return
    }

    for i := 0; i < n; i++ {
        parts = strings.Split(readLine(reader), " ")

        if len(parts) != 2 {
            return
        }

        book[strings.ToLower(parts[0])] = parts[1]
    }

    query = readLine(reader)
    for len(query) > 0 {
        queries = append(queries, query)
        query = readLine(reader)
    }

    for _, query := range queries {
        if len(book[query]) > 0 {
            fmt.Printf("%s=%s\n", query, book[query])
        } else {
            fmt.Println("Not found")
        }
    }
}

func readLine(reader *bufio.Reader) string {
    str, _, err := reader.ReadLine()
    if err == io.EOF {
        return ""
    }

    return strings.TrimRight(string(str), "\r\n")
}

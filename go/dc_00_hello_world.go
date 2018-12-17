package main

import (
    "fmt"
    "bufio"
    "os"
)

func main() {
    var (
        scanner *bufio.Scanner
    )

    fmt.Println("Hello, World.")

    scanner = bufio.NewScanner(os.Stdin)

    scanner.Scan()
    fmt.Println(scanner.Text())
}

package main

import (
    "bufio"
    "os"
    "strings"
    "fmt"
    "io"
    "strconv"
)

func sort(arr []int64, counter int) {
    var (
        numSwaps int
        swaping int64

        sorted map[int]int64
    )

    sorted = make(map[int]int64)

    for pos, item := range arr {
        sorted[pos] = item
    }

    for i := 0; i < counter; i++ {
        for j := 0; j < (counter - 1); j++ {
            if sorted[j] > sorted[j + 1] {
                swaping = sorted[j]
                sorted[j] = sorted[j + 1]
                sorted[j + 1] = swaping

                numSwaps++
            }
        }
    }

    fmt.Printf("Array is sorted in %d swaps.\n", numSwaps)
    fmt.Printf("First Element: %d\n", sorted[0])
    fmt.Printf("Last Element: %d\n", sorted[len(sorted) - 1])
}

func main() {
    var (
        reader *bufio.Reader
        counter, tmp int64
        arrStr []string
        arr []int64
    )

    reader = bufio.NewReaderSize(os.Stdin, 1024*1024)

    counter, _ = strconv.ParseInt(readLine(reader), 10, 64)
    if (counter < 2) || (counter > 600) {
        return
    }

    arrStr = strings.Split(readLine(reader), " ")

    for _, item := range arrStr {
        tmp, _ = strconv.ParseInt(item, 10, 64)
        if (tmp < 1) || (tmp > 10000000) {
            return
        }

        arr = append(arr, tmp)
    }

    sort(arr, int(counter))
}

func readLine(reader *bufio.Reader) string {
    str, _, err := reader.ReadLine()
    if err == io.EOF {
        return ""
    }

    return strings.TrimRight(string(str), "\r\n")
}

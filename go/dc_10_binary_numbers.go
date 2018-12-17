package main

import (
    "bufio"
    "fmt"
    "io"
    "os"
    "strconv"
    "strings"
)

func consecutiveLength(input int64) (counter int) {
    var (
        binary string
        length, max int
    )

    binary = strconv.FormatInt(input, 2)
    length = len(binary)

    for i := 0; i < length; i++ {
        switch binary[i] {
        case 49:
            counter++
        default:
            if max < counter {
                max = counter
            }

            counter = 0
        }
    }

    if counter > max {
        return counter
    } else {
        return max
    }
}

func main() {
    reader := bufio.NewReaderSize(os.Stdin, 1024 * 1024)

    nTemp, err := strconv.ParseInt(readLine(reader), 10, 64)
    checkError(err)
    
    if (nTemp < 1) || (nTemp > 1000000) {
        return
    }
    
    fmt.Println(consecutiveLength(nTemp))
}

func readLine(reader *bufio.Reader) string {
    str, _, err := reader.ReadLine()
    if err == io.EOF {
        return ""
    }

    return strings.TrimRight(string(str), "\r\n")
}

func checkError(err error) {
    if err != nil {
        panic(err)
    }
}

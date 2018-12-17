package main

import (
    "bufio"
    "fmt"
    "io"
    "os"
    "strconv"
    "strings"
    "math"
)

func calcMaxHourglassRowSum(arr [][]int32) (max int32) {
    var (
        sum int32
        length int
    )

    length = len(arr) - 2
    max = math.MinInt32

    for row := 1; row <= length; row++ {
        sum = 0

        for col := 1; col <= length; col++ {
            sum = arr[row][col]
            sum = sum + arr[row - 1][col - 1] + arr[row - 1][col] + arr[row - 1][col + 1]
            sum = sum + arr[row + 1][col - 1] + arr[row + 1][col] + arr[row + 1][col + 1]

            if sum > max {
                max = sum
            }
        }
    }

    return max
}

func main() {
    reader := bufio.NewReaderSize(os.Stdin, 1024 * 1024)

    var arr [][]int32
    for i := 0; i < 6; i++ {
        arrRowTemp := strings.Split(readLine(reader), " ")

        var arrRow []int32
        for _, arrRowItem := range arrRowTemp {
            arrItemTemp, err := strconv.ParseInt(arrRowItem, 10, 64)
            checkError(err)
            arrItem := int32(arrItemTemp)
            arrRow = append(arrRow, arrItem)
        }

        if len(arrRow) != int(6) {
            panic("Bad input")
        }

        arr = append(arr, arrRow)
    }

    fmt.Println(calcMaxHourglassRowSum(arr))
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

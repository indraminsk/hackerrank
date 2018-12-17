package main
import "fmt"

func main() {
    var (
        T, length, i, j int
        text, even, odd string
        isEven bool
        result []string
    )

    //Enter your code here. Read input from STDIN. Print output to STDOUT
    fmt.Scan(&T)

    if (T < 1) || (T > 10) {
        fmt.Println("Not valide number of test cases")
        return
    }

    for i = 0; i < T; i++ {
        fmt.Scan(&text)
        length = len(text)

        if (length < 2) || (length > 10000) {
            fmt.Println("Not valide length of text")
            return
        }

        isEven = true
        even = ""
        odd = ""

        for j = 0; j < length; j++ {
            if isEven {
                isEven = false
                even = even + string(text[j])
            } else {
                isEven = true
                odd = odd + string(text[j])
            }
        }

        result = append(result, fmt.Sprintf("%s %s", even, odd))
    }

    length = len(result)
    for i = 0; i < length; i++ {
        fmt.Println(result[i])
    }
}

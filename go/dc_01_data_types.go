package main


import (
  "fmt"
  "os"
  "bufio"
  "strconv"
)

func main() {
  	var _ = strconv.Itoa // Ignore this comment. You can still use the package "strconv".
  
    var i uint64 = 4
    var d float64 = 4.0
    var s string = "HackerRank "

    scanner := bufio.NewScanner(os.Stdin)
    
    // Declare second integer, double, and String variables.
    
    //===my===
    var (
        id uint64
        dd float64
        sd string
    )

    // Read and save an integer, double, and String to your variables.
    scanner.Scan()
    id, _ = strconv.ParseUint(scanner.Text(), 10, 0)

    scanner.Scan()
    dd, _ = strconv.ParseFloat(scanner.Text(), 0)

    scanner.Scan()
    sd = scanner.Text()

    // Print the sum of both integer variables on a new line.
    fmt.Println(i + id)

    // Print the sum of the double variables on a new line.
    fmt.Printf("%.1f\n", d + dd)

    // Concatenate and print the String variables on a new line
    // The 's' variable above should be printed first.
    fmt.Print(s + sd)
    //===end===
}

package main
import ("fmt")

func main() {
  var (
     a int
     b int = 4
     c string = "hello"
     d  = "hhello"
     ar = [...]string{"keep","this value","solid"}
     ar1 = [4]string{"keep","this value","solid"}
   )
 e := a

  fmt.Println(a)
  fmt.Println(b)
  fmt.Println(c)
  fmt.Println(d)
  fmt.Println(len(ar))
  fmt.Println(ar1)
  fmt.Println(e)

}

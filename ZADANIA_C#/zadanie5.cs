using System;
using System.Collections;

namespace HelloWorld
{
  class Program
  {

    static void Main(string[] args)
    {
      Console.WriteLine("Podaj liczbe: ");
      int x = Convert.ToInt16(Console.ReadLine());
      if (x < 0){
        Console.WriteLine("Podana liczba jest mniejsza od zera");
      }
      if(x > 0){
        Console.WriteLine("Podana liczba jest wieksza od zera");
      }
      if(x == 0){
        Console.WriteLine("Podana liczba jest rowna 0");

      }

    }
  }
}

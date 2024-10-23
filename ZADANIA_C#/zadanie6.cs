using System;
using System.Linq;

namespace HelloWorld
{
  class Program
  {

    static void Main(string[] args)
    {
      Console.WriteLine("Podaj wyraz: ");
      string x = Console.ReadLine();
      Console.WriteLine("Podaj znak do policzenia: ");
      char y = Console.ReadKey().KeyChar;
      int count = x.Count(c => c == y);
      Console.WriteLine("znak " + y +  "występuje w ciągu " + x + " " + count + " razy");
    }
  }
}

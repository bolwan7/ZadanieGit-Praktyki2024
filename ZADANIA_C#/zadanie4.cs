using System;

namespace HelloWorld
{
  class Program
  {
    static void Main(string[] args)
    {
        Console.WriteLine("Podaj pierwsza liczbe: ");
        int x = Convert.ToInt16(Console.ReadLine());
        Console.WriteLine("Podaj druga liczbe: ");
        int y = Convert.ToInt16(Console.ReadLine());
        int d = x+y;
        Console.WriteLine("Dodawanie: "+  d);
        int o = x-y;
        Console.WriteLine("Odejmowanie: " + o);
        int m = x*y;
        Console.WriteLine("Mnozenie: " + m);
        int dz = x/y;
        Console.WriteLine("Dzielenie: " + dz);
    }
  }
}

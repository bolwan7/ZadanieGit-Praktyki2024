using System;

namespace HelloWorld
{
  class Program
  {
    
    static void Main(string[] args)
    {
      Console.WriteLine("Podaj liczbe x: ");
      int x = Convert.ToInt16(Console.ReadLine());
      Console.WriteLine("Podaj liczbe y: ");
      int y = Convert.ToInt16(Console.ReadLine());
      Console.WriteLine("Podaj liczbe z: ");
      int z = Convert.ToInt16(Console.ReadLine());
      Console.WriteLine("Podaj liczbe o: ");
      int o = Convert.ToInt16(Console.ReadLine());
      if (x % 2 == 0 & y % 2 == 0 & z % 2 == 0 & o % 2 == 0 ){
        Console.WriteLine("Wszystkie liczby sa parzyste!");
      }
      else {
        Console.WriteLine("Nie wszystkie liczby sa parzyste!");
      }

    }
  }
}

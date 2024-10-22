using System;

namespace HelloWorld
{
  class Program2
  {
    
    static void Main2(string[] args)
    {
      Console.WriteLine("Podaj liczbe x: ");
      int x = Convert.ToInt16(Console.ReadLine());
      Console.WriteLine("Podaj liczbe y: ");
      int y = Convert.ToInt16(Console.ReadLine());
      Console.WriteLine("Podaj liczbe z: ");
      int z = Convert.ToInt16(Console.ReadLine());
      int o = x + y + z;
      if (o % 2 == 0)
        Console.WriteLine("Twoje liczby sa podzielne przez 2 z reszta  0!");
      else {
        Console.WriteLine("Twoje liczby nie sa podzielne przez 2 z reszta 0!");
      }
    }
  }
}
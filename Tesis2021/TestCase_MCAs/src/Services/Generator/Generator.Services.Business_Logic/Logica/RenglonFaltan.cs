using System;

namespace CAsBouch.Logica
{
    public class RenglonFaltan : IComparable<RenglonFaltan>
    {
        public int Faltan;
        public int[] Renglon;


        public RenglonFaltan(int faltan, int[] renglon)
        {
            Faltan = faltan;
            var k = renglon.GetUpperBound(0) + 1;
            Renglon = new int[k];
            for (var columna = 0; columna < k; columna++)
                Renglon[columna] = renglon[columna];
        }

        public int CompareTo(RenglonFaltan other)
        {
            return Faltan.CompareTo(other.Faltan);
        }
    }
}
using System;
namespace CAsBouch
{
    class Program
    {
        [STAThread]
        static void Main()
        {
            const string theGenerator = "ISA";
            const string theRequiredCA = "N16K8V4^4-3^1-2^3t2.ca";
            const int theSeed = 1;
            const string theParameters = "500 500";

            var myAlgorithm = new AlgoritmoParalelo(theGenerator, theRequiredCA,
                                              theSeed, theParameters);
            var sol = myAlgorithm.Ejecutar();
            Console.WriteLine(sol.MiCA.ToString());
            Console.WriteLine("Fitness = " + sol.Fitness);
            Console.ReadKey();
        }
    }
}

//construirCAs[ind++] = "N5K4V2^4t2.ca";   //OK
//construirCAs[ind++] = "N8K4V2^4t3.ca";   //OK
//construirCAs[ind++] = "N10K5V2^5t3.ca";   //OK
//construirCAs[ind++] = "N12K6V2^6t3.ca";   //OK
//construirCAs[ind++] = "N12K7V2^7t3.ca";   //OK
//construirCAs[ind++] = "N13K11V2^11t3.ca";   //OK

////Tabla 1
//construirCAs[ind++] = "N45K18V6^7-4^8-2^3t2.ca";   //OK con N46, tendriamos 1 fila más
//construirCAs[ind++] = "N28K61V4^15-3^17-2^29t2.ca"; //OK
//construirCAs[ind++] = "N37K16V6^4-4^5-5^7t2.ca";
//construirCAs[ind++] = "N44K14V6^5-5^5-3^4t2.ca";
//construirCAs[ind++] = "N46K18V6^7-4^8-2^3t2.ca";
//construirCAs[ind++] = "N51K19V6^9-4^3-2^7t2.ca";

////Tabla2
//construirCAs[ind++] = "N36K10V6^2-5^2-4^2-3^2-2^2t2.ca";  //OK
//construirCAs[ind++] = "N49K12V7^2-6^2-5^2-4^2-3^2-2^2t2.ca";  //OK
//construirCAs[ind++] = "N100K5V10^2-8^3t2.ca"; //OK
//construirCAs[ind++] = "N64K14V8^2-7^2-6^2-5^2-4^2-3^2-2^2t2.ca";  // meta 64
//construirCAs[ind++] = "N180K10V6^2-5^2-4^2-3^2-2^2t3.ca";
//construirCAs[ind++] = "N307K12V7^2-6^2-5^2-4^2-3^2-2^2t3.ca";
//construirCAs[ind++] = "N503K14V8^2-7^2-6^2-5^2-4^2-3^2-2^2t3.ca";
//construirCAs[ind++] = "N81K16V9^2-8^2-7^2-6^2-5^2-4^2-3^2-2^2t2.ca";
//construirCAs[ind++] = "N100K18V10^2-9^2-8^2-7^2-6^2-5^2-4^2-3^2-2^2t2.ca";
//construirCAs[ind++] = "N121K20V11^2-10^2-9^2-8^2-7^2-6^2-5^2-4^2-3^2-2^2t2.ca";

//construirCAs[ind++] = "N104K5V10^5t2.ca"; // meta real es 104 e ideal 100 problema***
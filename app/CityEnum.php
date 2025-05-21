<?php

namespace App;

enum CityEnum : string{
     // Egypt
     case Cairo = "Cairo";
     case Giza = "Giza";
     case Alexandria = "Alexandria";
    // United States
    case NewYork = "New York";
    case LosAngeles = "Los Angeles";
    case Chicago = "Chicago";

    // Germany
    case Berlin = "Berlin";
    case Munich = "Munich";
    case Frankfurt = "Frankfurt";

    // France
    case Paris = "Paris";
    case Lyon = "Lyon";
    case Marseille = "Marseille";

    // Brazil
    case SaoPaulo = "São Paulo";
    case RioDeJaneiro = "Rio de Janeiro";
    case Brasilia = "Brasília";

    // India
    case Mumbai = "Mumbai";
    case Delhi = "Delhi";
    case Bangalore = "Bangalore";

    // Canada
    case Toronto = "Toronto";
    case Vancouver = "Vancouver";
    case Montreal = "Montreal";

    // China
    case Beijing = "Beijing";
    case Shanghai = "Shanghai";
    case Guangzhou = "Guangzhou";

    // Japan
    case Tokyo = "Tokyo";
    case Osaka = "Osaka";
    case Kyoto = "Kyoto";

    // Australia
    case Sydney = "Sydney";
    case Melbourne = "Melbourne";
    case Brisbane = "Brisbane";


  }
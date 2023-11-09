<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte interactive</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
      <img src="\France_18_regions.png" alt="Carte des régions de France" usemap="#regions">
        <map name="regions">
            <area data-id="normandie" shape="poly" coords="310,79,322,95,324,127,317,135,311,139,309,153,287,160,291,175,285,179,284,193,271,181,264,170,254,175,246,165,225,170,205,166,199,173,192,163,200,158,191,153,192,140,183,119,175,100,189,107,196,100,204,100,199,108,207,118,233,125,253,127,273,115,259,113,264,103" href="" alt="normandie">
            <area data-id="hauts-de-france" shape="poly" coords="351,24,316,36,311,80,323,93,323,126,376,140,392,150,399,125,412,118,414,104,421,89,397,64,361,43" href="" alt="hauts-de-france">
            <area data-id="ile-de-france" shape="poly" coords="320,128,316,137,310,140,317,161,329,172,331,179,346,179,352,191,370,190,374,178,387,175,390,164,388,151,374,137" href="" alt="Ile-de-France">
            <area data-id="grand-est" shape="poly" scoords="422,87,436,85,444,75,447,95,471,113,483,111,491,117,498,114,511,116,520,133,525,129,533,136,546,133,555,138,581,146,563,162,554,198,550,225,542,233,513,202,498,201,489,199,477,215,475,221,468,216,461,222,448,213,448,200,433,199,408,203,388,175,395,163,392,153,401,125,412,115" alt="Grand-Est">
            <area data-id="bretagne" shape="poly" coords="203,169,211,170,211,198,202,211,197,204,187,215,170,219,171,226,159,228,149,221,132,223,97,207,83,211,70,197,84,186,70,178,63,169,91,158,102,163,112,159,112,152,127,148,147,167,159,159,170,169,178,159" href="" alt="bretagne">
            <area data-id="pays-de-la-loire" shape="poly" coords="211,174,219,169,223,174,242,171,251,177,263,171,270,180,286,190,284,211,267,224,251,251,219,258,229,290,207,296,183,285,167,266,167,248,179,241,162,241,153,236,155,233,170,228,171,220,202,210,212,202" alt="Pays de la Loire">
            <area data-id="centre-val-de-loire" shape="poly" coords="313,141,315,158,329,175,331,182,347,180,352,188,348,192,369,191,376,200,372,211,365,222,366,234,375,258,373,266,362,270,357,274,353,284,345,283,341,291,324,287,309,291,301,291,299,283,291,278,278,257,266,259,257,246,264,222,279,217,291,195,284,183,294,173,287,160,310,155" href="" alt="Centre-Val-de-Loire">
            <area data-id="bourgogne-franche-comte" shape="poly" coords="378,200,371,183,387,178,395,186,405,202,438,200,446,214,458,223,475,216,493,199,511,204,528,214,531,224,523,234,492,289,484,301,477,291,469,295,462,283,448,284,440,300,427,295,423,303,409,300,410,285,401,279,403,271,376,273,369,237" href="" alt="Bourgogne-Franche-Comté">
            <area data-id="nouvelle-aquitaine" shape="poly" coords="186,462,198,469,198,481,241,496,253,463,246,449,245,430,279,422,290,411,316,367,334,376,351,347,354,314,342,288,303,291,276,257,265,258,254,246,248,253,224,257,233,291,210,295,203,312,212,345,197,447" alt="Nouvelle-Aquitaine">
            <area data-id="auvergne-rhone-alpes" shape="poly" coords="342,288,356,283,361,270,371,265,378,273,395,273,409,285,406,298,423,309,426,297,437,297,444,305,448,286,458,285,469,298,488,301,500,297,520,289,529,315,520,323,536,348,526,365,510,366,499,363,506,376,470,399,476,412,470,420,449,402,445,411,414,408,403,383,394,382,386,373,376,374,371,389,361,374,350,388,340,389,338,373,347,348,353,339,352,322,359,311" href="" alt="Auvergne-Rhône-Alpes">
            <area data-id="occitanie" shape="poly" coords="246,430,244,448,253,464,241,491,256,502,281,500,281,489,326,508,324,514,354,521,376,513,375,479,412,451,421,457,445,426,436,411,415,409,403,382,388,376,378,376,373,392,364,377,352,386,340,394,333,373,327,374,311,376,319,367,289,400,288,421,271,426" alt="Occitanie">
            <area data-id="provence-alpes-cote-d-azur" shape="poly" coords="426,454,443,428,438,408,454,410,469,420,478,415,469,402,476,397,495,377,499,365,515,360,528,377,532,386,524,397,525,408,545,420,554,415,556,423,548,439,521,459,515,472,495,481,483,481,469,471,463,463,452,465,437,463" alt="Provence Alpes Côte d'Azur">
            <area data-id="corse" shape="poly" coords="624,483,631,533,625,541,624,556,615,574,601,565,591,520,613,497" href="" alt="Corse">
            <area data-id="guadeloupe" shape="poly" coords="28,136,39,147,42,165,14,162,11,145" href="" alt="Guadeloupe">
            <area data-id="martinique" shape="poly" coords="24,207,37,212,42,225,40,232,29,225,28,222,22,213" href="" alt="Martinique">
            <area data-id="guyane" shape="poly" coords="42,327,62,337,85,339,95,344,127,373,149,388,152,402,155,390,161,395,170,419,163,426,151,442,137,470,116,512,112,519,101,525,96,532,86,527,78,528,76,519,65,529,50,522,25,533,7,525,17,509,24,495,24,473,36,452,26,437,16,422,9,401,11,386,9,374,21,354" href="" alt="Guyane">
            <area data-id="mayotte"shape="rect" coords="436,533,463,564" href="" alt="Mayotte">
            <area data-id="la-reunion" shape="poly" coords="504,542,509,548,507,552,513,556,528,561,536,559,536,550,531,540,528,533,516,531,509,534" href="" alt="La Réunion">
        </map>
    </div>
    <div class="list">
        <label for="selection-region">Choisissez une région</label>


        <select name="region" id="selection-region">
        <option>Choisissez une région</option>
            <option>grand-est</option>
            <option>normandie</option>
            <option>corse</option>
            <option>provence-alpes-cote-d-azur</option>
            <option>pays-de-la-loire</option>
            <option>hauts-de-france</option>
            <option>bretagne</option>
            <option>guyane</option>
            <option>centre-val-de-loire</option>
            <option>la-reunion</option>
            <option>occitanie</option>
            <option>martinique</option>
            <option>bourgogne-franche-comte</option>
            <option>nouvelle-Aquitaine</option>
            <option>guadeloupe</option>
            <option>auvergne-rhone-alpes</option>
            <option>mayotte</option>
            <option>ile-de-france</option>
        </select>
    </div>
    <script src="index.js"></script>
</body>
</html>
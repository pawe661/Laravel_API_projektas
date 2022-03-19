# Laravel_API_projektas

1. Sukurti projektą "serverio-puse". Šį projektą paruošti kaip API.
2. Jame sukurtį modelį "Image":
*id
*title - string
*alt - string
*url - string
*description - string
3. Susikurti 150 netikrų paveiksliukų.
4. Sukurti visas API CRUD operacijas. Index funkcija turi grąžinti puslapiuotus duomenis po 15.
5. Sukurti projektą "kliento-puse". Šio projekto prie duomenų bazės prijungti nereikia, naudoti tik blade failus.
6. AJAX vykdant užklausą sukurti CRUD operacijas(kaip paskaitose). Pastaba: paveiksliuko url paprastas tekstas, įkėlimo iš kompiuterio daryti nereikia.

Papildomai ir kam įdomu:
1. "serverio-puse" prijungti prie nemokamo paveiksliukų API(pvz. UnsplashApi) ir "serverio-puse" papildyti ne tik netikrais duomenimis, bet ir realiais duomenimis iš paveiksliukų API.
2. "kliento-puse" create ir edit operacijas papildyti taip, kad paveiksliuko nuoroda būtų įrašoma kaip tekstas arba su <select> pasirenkamas realus paveiksliukas iš paveiksliukų API. Tam reikia ir prie kliento pusės
prijungti paveiksliukų API.

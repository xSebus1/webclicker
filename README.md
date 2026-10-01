Koncept gry: klikanie, w buttona który daje klikniecia każde klikniecie zwieksza ci ich ilosc, a za nie kupujesz 
ulepszenia aby wiecej klikac, i szybciej rozbudować stronę)


* gracz zaczyna z 0 kliknieciami, za kazdym kliknieciem zdobywa punkt
  - ile punktów zdobędzie jest liczone na podstawie ilości ulepszeń.
* gracz może kupywać ulepszenia które zwiększają mnoznik kliknięć
  - gracz ma zawsze 1 ulepszenie do wyboru, a przyrost kliknięć jest opisany
* każde ulepszenia dodaje elementy na stronie
  - po załadowaniu strony mamy text

  <div align='center' flex-direction='column'>
  
  -[ULEPSZENIE #2]
  -[ ARTICLE | 500 MONET ]
  -[ BONUS DO KLIKNIĘĆ: 2 ]

  </div>
  
* dane zapisywanie są jako COOKIES
  - Dla kliknięć: nazwa: kliknięcia wartosc w int
  - Dla ulepszeń nazwa: (element jaki doda ulepszenie np ulepszenie to footer nazwa cookie to bedzie footer) bedzie to bool
* strona jest odswiezana za kazda aktulizacja danych
  - Zdobycie klikniecia
  - Zbudowanie Ulepszenia
* ulepszanie bedzie odblokowywało element:
  - pokazywało go na stronie
* dodatkowo pod iloscia punktów gracza bedzie licznik ILE PUNKTÓW / 10 kliknięć
  - gracz zdobywa 5 punktów za kliknięcie pod licznikiem bedzie 50 PKT / 10 KLIKNIĘC
* celem gracza jest skończenie całej strony poprzez kupywanie ulepszeń
  - Każde ulepszenie doda coś na strone np: nav, aside, image, footer.

PHP-Taplist
=========
A fork of [kegerface](https://github.com/kegerface/kegerface).

A simple php based taplist.

Input is read from 'beers.csv', one line per-tap, theoretically unlimited.

CSV file must begin with a header row, contraining the following columns:
```
BeerName,Style,Brewery,ABV,IBU,SRM,Status,BeerNameL
```

A definite work-in-progress, configuration is limited at this time. Here are the allowable values for each option:

 * BeerName: string for beer name
 * Style : string for beer style
 * Brewery : string for brewery name
 * ABV: float for ABV value
 * IBU: 0,1,2,3 indicating bitterness level
   - @todo, make this a range of 0-150, select  appropriate hop icon based on value
 * SRM: 1,5,10,15,20,25,30,36,40 indicating approximate SRM
   - @todo, make this input actual SRM, and color beer/glass accordingly
 * Status: 0,10,25,50,100 indicating approximate percentage of beer left in keg
 * BeerNameL: BeerName,BeerNameL

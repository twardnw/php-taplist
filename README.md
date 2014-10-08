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

| Column | Values | notes |
|--------|--------|-------|
| BeerName | text string | beer name |
| Style | text string | beer style |
| Brewery | text string | brewery name |
| ABV | decimal | ABV value |
| IBU | 0,1,2,3 | approximate bitterness level @todo, make this a range of 0-150, select  appropriate hop icon based on value |
| SRM | 1,5,10,15,20,25,30,36,40 | approximate SRM @todo, make this input actual SRM, and color beer/glass accordingly |
| Status | 0,10,25,50,100 | approximate percentage of beer left in keg |
| BeerNameL | BeerName,BeerNameL | indicates if beer name should be formatted for a line-break |

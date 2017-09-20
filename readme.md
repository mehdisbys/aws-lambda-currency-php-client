# PHP client for invoking AWS Lambda function

This repository goes hand-in-hand with [AWS Lambda Currency](https://github.com/mehdisbys/aws-lambda-currency)

It invokes an AWS Lambda function returning a list of currencies from [Currency Layer API](https://currencylayer.com/)

Example response :

  ```
  {
   "timestamp":1505932759,
   "source":"USD",
   "quotes":{
      "USDGBP":0.74211,
      "USDEUR":0.841506,
      "USDBTC":0.000253
   }
}
  ```

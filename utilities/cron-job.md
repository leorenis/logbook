# Cron expression examples - Quartz

| Expression                   | Meaning                                                              |
|------------------------------|----------------------------------------------------------------------|
| `* * * ? * *`                | Every second                                                         |
| `0 * * ? * *`                | Every minute                                                         |
| `0 */2 * ? * *`              | Every even minute                                                    |
| `0 1/2 * ? * *`              | Every uneven minute                                                  |
| `0 */2 * ? * *`              | Every 2 minutes                                                      |
| `0 */3 * ? * *`              | Every 3 minutes                                                      |
| `0 */4 * ? * *`              | Every 4 minutes                                                      |
| `0 */5 * ? * *`              | Every 5 minutes                                                      |
| `0 */10 * ? * *`             | Every 10 minutes                                                     |
| `0 */15 * ? * *`             | Every 15 minutes                                                     |
| `0 */30 * ? * *`             | Every 30 minutes                                                     |
| `0 15,30,45 * ? * *`         | Every hour at minutes 15, 30 and 45                                  |
| `0 0 * ? * *`                | Every hour                                                           |
| `0 0 */2 ? * *`              | Every hour                                                           |
| `0 0 0/2 ? * *`              | Every even hour                                                      |
| `0 0 1/2 ? * *`              | Every uneven hour                                                    |
| `0 0 */3 ? * *`              | Every three hours                                                    |
| `0 0 */4 ? * *`              | Every four hours                                                     |
| `0 0 */6 ? * *`              | Every six hours                                                      |
| `0 0 */8 ? * *`              | Every eight hours                                                    |
| `0 0 */12 ? * *`             | Every twelve hours                                                   |
| `0 0 0 * * ?`                | Every day at midnight - 12am                                         |
| `0 0 1 * * ?`                | Every day at 1am                                                     |
| `0 0 6 * * ?`                | Every day at 6am                                                     |
| `0 0 12 * * ?`               | Every day at noon - 12pm                                             |
| `0 0 12 * * ?`               | Every day at noon - 12pm                                             |
| `0 0 12 * * SUN`             | Every Sunday at noon                                                 |
| `0 0 12 * * MON`             | Every Monday at noon                                                 |
| `0 0 12 * * TUE`             | Every Tuesday at noon                                                |
| `0 0 12 * * WED`             | Every Wednesday at noon                                              |
| `0 0 12 * * THU`             | Every Thursday at noon                                               |
| `0 0 12 * * FRI`             | Every Friday at noon                                                 |
| `0 0 12 * * SAT`             | Every Saturday at noon                                               |
| `0 0 12 * * MON-FRI`         | Every Weekday at noon                                                |
| `0 0 12 * * SUN,SAT`         | Every Saturday and Sunday at noon                                    |
| `0 0 12 */7 * ?`             | Every 7 days at noon                                                 |
| `0 0 12 1 * ?`               | Every month on the 1st, at noon                                      |
| `0 0 12 2 * ?`               | Every month on the 2nd, at noon                                      |
| `0 0 12 15 * ?`              | Every month on the 15th, at noon                                     |
| `0 0 12 1/2 * ?`             | Every 2 days starting on the 1st of the month, at noon               |
| `0 0 12 1/4 * ?`             | Every 4 days staring on the 1st of the month, at noon                |
| `0 0 12 L * ?`               | Every month on the last day of the month, at noon                    |
| `0 0 12 L-2 * ?`             | Every month on the second to last day of the month, at noon          |
| `0 0 12 LW * ?`              | Every month on the last weekday, at noon                             |
| `0 0 12 1L * ?`              | Every month on the last Sunday, at noon                              |
| `0 0 12 2L * ?`              | Every month on the last Monday, at noon                              |
| `0 0 12 6L * ?`              | Every month on the last Friday, at noon                              |
| `0 0 12 1W * ?`              | Every month on the nearest Weekday to the 1st of the month, at noon  |
| `0 0 12 15W * ?`             | Every month on the nearest Weekday to the 15th of the month, at noon |
| `0 0 12 ? * 2#1`             | Every month on the first Monday of the Month, at noon                |
| `0 0 12 ? * 6#1`             | Every month on the first Friday of the Month, at noon                |
| `0 0 12 ? * 2#2`             | Every month on the second Monday of the Month, at noon               |
| `0 0 12 ? * 5#3`             | Every month on the third Thursday of the Month, at noon - 12pm       |
| `0 0 12 ? JAN *`             | Every day at noon in January only                                    |
| `0 0 12 ? JUN *`             | Every day at noon in June only                                       |
| `0 0 12 ? JAN,JUN *`         | Every day at noon in January and June                                |
| `0 0 12 ? DEC *`             | Every day at noon in December only                                   |
| `0 0 12 ? JAN,FEB,MAR,APR *` | Every day at noon in January, February, March and April              |
| `0 0 12 ? 9-12 *`            | Every day at noon between September and December                     |

Read more [freeformatter.com](https://www.freeformatter.com/cron-expression-generator-quartz.html)
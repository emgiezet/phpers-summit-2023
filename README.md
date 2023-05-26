# High performance PHP8 at Scale
Code used in phpers-summit-2023 presentation.


## Do you want to run benchmarks of phpcode on your own?

```shell
cd benchmarks
./vendor/bin/phpbench run tests/Benchmark --report=default

```
## Do you want to check siege load-test results ?

```shell
cd siege/results
ls
```
## Do you want to run siege load-test on symfony application?
If you dont have siege install it:

```shell
sudo apt-get install siege
```

Then

Run the one of the symfony-demo-app:
You will need `docker` and `docker-compose`
```shell
cd symfony-demo-app/8.1
docker-compose up -d
```
It take a while to build and run. After build begin the siege

```shell
cd siege/
./benchmark.sh
```
the output will be visible in the console after the siege test will finish.


```json
{       "transactions":                        66730,
        "availability":                       100.00,
        "elapsed_time":                       149.54,
        "data_transferred":                  5511.54,
        "response_time":                        0.22,
        "transaction_rate":                   446.24,
        "throughput":                          36.86,
        "concurrency":                         99.45,
        "successful_transactions":             66730,
        "failed_transactions":                     0,
        "longest_transaction":                  1.75,
        "shortest_transaction":                 0.00
}

```

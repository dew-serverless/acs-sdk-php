fetch-meta:
	curl -o data/products.json https://api.aliyun.com/meta/v1/products.json
	php build/fetch-meta.php

.PHONY: fetch-meta

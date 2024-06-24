fetch-meta:
	curl -o data/products.json https://api.aliyun.com/meta/v1/products.json
	php build/fetch-meta.php

build-json:
	php build/build-json.php

.PHONY: fetch-meta build-json

PROTOC ?= protoc

fetch-meta:
	php build/fetch-meta.php

build-clients:
	php build/build-clients.php
	php build/annotate-clients.php

build-tablestore-proto:
	${PROTOC} --php_out=src -Iprotobuf/tablestore protobuf/tablestore/*.proto
	# Fix path of generated PHP files
	rm -rf src/Tablestore/{Messages,Metadata}
	mv src/Dew/Acs/Tablestore/* src/Tablestore/
	rm -r src/Dew/Acs/Tablestore/

clean-tablestore-proto:
	rm -rf src/Tablestore/Protobuf

.PHONY: fetch-meta build-json build-clients \
	build-tablestore-proto clean-tablestore-proto

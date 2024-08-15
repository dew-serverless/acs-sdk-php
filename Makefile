PROTOC ?= protoc

fetch-meta:
	php build/fetch-meta.php

build-clients:
	php build/build-clients.php
	php build/annotate-clients.php

build-%-proto:
	[ -d "protobuf/$*" ] || { echo "Could not find protobuf for $*"; exit 1; }
	${PROTOC} --php_out=src -Iprotobuf/$* protobuf/$*/*.proto
	# Fix path of generated PHP files
	PRODUCT=$(shell find ./src -type d -iname $* -maxdepth 1 -exec basename {} \;) && \
		rm -rf src/$$PRODUCT/{Messages,Metadata} && \
		mv src/Dew/Acs/$$PRODUCT/* src/$$PRODUCT/ && \
		rm -rf src/Dew/

.PHONY: fetch-meta build-clients

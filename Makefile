PROTOC ?= protoc
PROTO_SRC_DIR = protobuf
PROTO_GEN_DIR = src

fetch-meta:
	php build/fetch-meta.php

build-clients:
	php build/build-clients.php
	php build/annotate-clients.php

build-%-proto:
	[ -d "$(PROTO_SRC_DIR)/$*" ] || { echo "Could not find protobuf for $*"; exit 1; }
	$(PROTOC) --php_out=$(PROTO_GEN_DIR) -I$(PROTO_SRC_DIR)/$* $(PROTO_SRC_DIR)/$*/*.proto
	# Fix path of generated PHP files
	PRODUCT=$(shell find ./src -type d -iname $* -maxdepth 1 -exec basename {} \;); \
		[ -n "$$PRODUCT" ] || { echo "Could not find directory for $*"; rm -rf $(PROTO_GEN_DIR)/Dew/; exit 1; }; \
		rm -rf $(PROTO_GEN_DIR)/$$PRODUCT/{Messages,Metadata} && \
		mv $(PROTO_GEN_DIR)/Dew/Acs/$$PRODUCT/* $(PROTO_GEN_DIR)/$$PRODUCT/ && \
		rm -rf $(PROTO_GEN_DIR)/Dew/

.PHONY: fetch-meta build-clients

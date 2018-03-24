
_GENERATE_DIR=./src/

ifdef GENERATE_DIR
_GENERATE_DIR=$(GENERATE_DIR)
endif

phpcs: pretest
		vendor/bin/phpcs --standard=PSR2 -n src test/unit/

phpcbf: pretest
		vendor/bin/phpcbf --standard=PSR2 -n src test/unit/

pretest:
		if [ ! -d vendor ] || [ ! -f composer.lock ]; then composer install; else echo "Already have dependencies"; fi

protobuf: pretest
		php ./vendor/bin/protobuf \
		--include-descriptors \
		--psr4=BitWasp\\TrezorProto \
		-i proto -o $(_GENERATE_DIR) \
		./proto/*.proto

check-src: pretest
		tool/check_src_dir.sh

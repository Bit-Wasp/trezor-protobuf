Trezor protobufs for PHP
=========================

[![Build Status](https://travis-ci.org/Bit-Wasp/trezor-protobuf.svg?branch=master)](https://travis-ci.org/Bit-Wasp/trezor-protobuf)

This repository aims to provide PHP classes generated from trezors protobuf definitions so they can be included in other projects.

Currently only the message.pb and types.pb are generated. They are correct as of:
 - https://github.com/trezor/trezor-common/blob/66a85673ed303f2cf48bdb3d027adbc7e8464364/protob/messages.proto
 - https://github.com/trezor/trezor-common/blob/66a85673ed303f2cf48bdb3d027adbc7e8464364/protob/types.proto

The package can be installed via composer:

    composer require bitwasp/trezor-protobuf

# Development

For an introduction into submitting a pull request, please review the [CONTRIBUTING.md](CONTRIBUTING.md)



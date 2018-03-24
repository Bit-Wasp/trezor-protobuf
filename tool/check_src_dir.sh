#!/bin/bash
set -x
_root=$(git rev-parse --show-toplevel)
cd $_root &&
mkdir test-src-dir &&
GENERATE_DIR=test-src-dir make protobuf &&
diff \
    <(find $_root/test-src-dir -type f -exec md5sum {} + | awk '{ print $1 }' | sort -k 2) \
    <(find $_root/src -type f -exec md5sum {} + | awk '{ print $1 }' | sort -k 2) &&
rm -rf test-src-dir

#!/bin/bash

ATTACKER_HOST=${ATTACKER_HOST:-localhost}
TEMPLATE_FILE=/opt/json-flash-csrf-poc/csrf.as
sed  "s/attacker-ip/$ATTACKER_HOST/" $TEMPLATE_FILE > /tmp/csrf.as
/opt/lampp/lampp start

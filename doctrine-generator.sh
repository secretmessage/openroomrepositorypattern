#!/bin/sh

# Doctrine 2 Entities Generator v0.1
# ==================================

# Requirements
# ============
# It's necessary to create a composer project before exec this script.
# More info about composer at https://getcomposer.org/doc/00-intro.md


echo Doctrine 2 Entities Generator v0.1
echo ==================================

# Remove ./config/yaml directory before
rm -rf ./config/yaml

# Create yaml directory
mkdir ./config/yaml

# Read the ./cli-config.php (by default) and generate mapping yaml files to ./config/yaml directory
php vendor/bin/doctrine orm:convert-mapping --namespace="" --force --from-database yml ./config/yaml

# Generated models to ./src directory
php vendor/bin/doctrine orm:generate-entities --generate-annotations=false --update-entities=true --generate-methods=false ./src

# Validate schema
php vendor/bin/doctrine orm:validate-schema
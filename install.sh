#!/bin/bash
# NOTE Create needed dirs for cake
# @author : Ambagasdowa
# @email    : ambagasdowa@gmail.com ; baizabal.jesus@gmail.com ; sekai.hakaimono@gmail.com
#

mkdir_cs(){
  base=$1
  sub=$2
  # cd 'app'
  # if [ -z ${1+x} ]; then echo "var is unset"; else echo "var is set to '$1'"; fi
  # if [ -z ${2+x} ]; then echo "var is unset"; else echo "var is set to '$2'"; fi
  if [ $2 ]; then
    mkdir $1
    cd $1
    printf '%s' "$2" | xargs -d, mkdir
    pwd
  else
    printf '%s' "$1" | xargs -d, mkdir
    pwd
  fi
}

basedir=`pwd`
wbr=$basedir"/webroot/"
tmpdir=$basedir"/tmp/"
echo $basedir
# Create the needed dirs
mkdir_cs 'logs'
# retain some compability with 1.3
mkdir_cs 'tmp' 'logs,cache,sessions,tests'
mkdir_cs 'cache' 'models,persistent,views'
cd $basedir
pwd
# change the owner to apache
# echo myPassword | sudo -S command
echo "we need the credential for change the owner of tmp dir"

sudo chown -R cyberio:cyberio $basedir"/tmp"
sudo chmod -R 755 $basedir"/tmp"
echo "done"

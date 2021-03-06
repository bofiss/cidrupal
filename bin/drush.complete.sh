#!/usr/bin/env sh

<<<<<<< HEAD
dir=$(d=${0%[/\\]*}; cd "$d"; cd "../vendor/drush/drush" && pwd)
=======
dir=$(d=${0%[/\\]*}; cd "$d"; cd "../vendor/bin/drush/drush" && pwd)
>>>>>>> 7bcae3dbd7620b15e30bc4c97aed4bb0c191de65

# See if we are running in Cygwin by checking for cygpath program
if command -v 'cygpath' >/dev/null 2>&1; then
	# Cygwin paths start with /cygdrive/ which will break windows PHP,
	# so we need to translate the dir path to windows format. However
	# we could be using cygwin PHP which does not require this, so we
	# test if the path to PHP starts with /cygdrive/ rather than /usr/bin
	if [[ $(which php) == /cygdrive/* ]]; then
		dir=$(cygpath -m $dir);
	fi
fi

dir=$(echo $dir | sed 's/ /\ /g')
"${dir}/drush.complete.sh" "$@"

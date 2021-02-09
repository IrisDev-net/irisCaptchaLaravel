git config --global http.proxy http://185.235.40.171:1314
git config --global https.proxy http://185.235.40.171:1314
////////////////////////////////////
Git global setup

git config --global user.name "hamed"
git config --global user.email "en.hamedamini@gmail.com"

Create a new repository

git clone https://gitlab.com/hamedamini/laravel-iris-captcha.git
cd laravel-iris-captcha
touch README.md
git add README.md
git commit -m "add README"
git push -u origin master

Push an existing folder

cd existing_folder
git init
git remote add origin https://gitlab.com/hamedamini/laravel-iris-captcha.git
git add .
git commit -m "Initial commit"
git push -u origin master

Push an existing Git repository

cd existing_repo
git remote rename origin old-origin
git remote add origin https://gitlab.com/hamedamini/laravel-iris-captcha.git
git push -u origin --all
git push -u origin --tags

/////////////////////////////////////////// problem crlf in git

Git can handle this by auto-converting CRLF line endings into LF when you add a file to the index, and vice versa when it checks out code onto your filesystem. You can turn on this functionality with the core.autocrlf setting. If you’re on a Windows machine, set it to true – this converts LF endings into CRLF when you check out code:
git config --global core.autocrlf true

If you’re on a Linux or Mac system that uses LF line endings, then you don’t want Git to automatically convert them when you check out files; however, if a file with CRLF endings accidentally gets introduced, then you may want Git to fix it. You can tell Git to convert CRLF to LF on commit but not the other way around by setting core.autocrlf to input:
git config --global core.autocrlf input

This setup should leave you with CRLF endings in Windows checkouts, but LF endings on Mac and Linux systems and in the repository. If you’re a Windows programmer doing a Windows-only project, then you can turn off this functionality, recording the carriage returns in the repository by setting the config value to false:
git config --global core.autocrlf false

If you want, you can deactivate this feature in your git core config using
git config core.autocrlf false

But it would be better to just get rid of the warnings using
git config core.autocrlf true

//////////////////////////////////////////
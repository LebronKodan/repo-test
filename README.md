repo-test
=========

This repo is used for my git learning.

- Git Basics
- Git Branching
- GitHub Related
- Customizing Git
- Git Internals

## Setup GitHub SSH Config
1. Generate ssh key file: `ssh-keygen -t rsa -C "xxx@xxx.com"`
2. Show ssh key: `cat id_rsa.pub`
3. Copy the key to GitHub: `https://github.com/settings/keys`
4. Test connection: `ssh -T git@github.com`
5. Clone or push use ssh mode: `git@github.com:LebronKodan/repo-test.git`

note: if you have cloned with https mode, then modify the `config` file under `.git` dir, change the `url` value.

## Reference
- Gitignore file: https://github.com/github/gitignore
- ProGit: https://git-scm.com/book/en/v2

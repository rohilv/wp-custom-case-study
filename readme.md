## WP Custom Case Study Plugin

- This WordPress plugin will add a new Post type as the 'Case Study' in Admin Menu.
- This as of now utilizes existing Page / Post Editor or Page Builders as default.
- It will also create a custom slug as `case-study`

### Installation

1. Download & Install using zip

- You can download the source code by selecting _Download_ Button above and selecting _zip_
- Go to _Plugins_ folder in you WP Dashboard > Select _Add Plugin_ > _Upload_
- Select the zip you just downloaded
- After Installation, Select _Activate_ from Plugins section

2.  Using Command line

- Using command line navigate to your Website root folder.
- Assuming that you dont have it already installed, else delete / backup the existing folder in `wp-content\plugins`
- Run the command mentioned below:
  ```
  git clone https://github.com/rohilv/wp-custom-case-study.git wp-content/plugins/custom-case-study && rm -rf wp-content/plugins/custom-case-study/.git wp-content/plugins/custom-case-study/readme.md
  ```

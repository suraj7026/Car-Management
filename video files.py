import os
pathoffile = r"D:\Downloads"
os.chdir(pathoffile)
for p, d, f in os.walk(pathoffile):
    for file in f:
        if file.endswith('.mp4') or file.endswith('.mkv'):
            print("File path: ", os.path.abspath(file))

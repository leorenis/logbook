# Windows setup

This a way to use [kaf](https://github.com/birdayz/kaf) in windows/amd64 env.

Get the binary [here](win_amd64.zip).


1. Extract the file `.zip` in a windows system files. _Suggestion:_ `$HOME\kafka\kaf`

2. Edit the `PATH environment Variable` to define a new option to save the directory containing de .exe file. _Suggestion:_ `$HOME\kafka\kaf`.

3. Set default configs of [kaf configs](https://github.com/birdayz/kaf/tree/master/examples). _Suggestion:_ Create a new file in `$HOME\.kaf\config` to define all configs.


4. Run the command:
```
kaf config $HOME\.kaf\config
```

**Note**: Replace $HOME to c:\Users\<youruser>\.kaf\...
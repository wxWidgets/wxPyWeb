#!/usr/bin/env python

"""app.py has a basic application class."""

import wx

from frame import Frame

class App(wx.App):
    """Application class."""

    def OnInit(self):
        self.frame = Frame(title='This is my App')
        self.frame.Show()
        self.SetTopWindow(self.frame)
        return True

def main():
    app = App()
    app.MainLoop()

if __name__ == '__main__':
    main()

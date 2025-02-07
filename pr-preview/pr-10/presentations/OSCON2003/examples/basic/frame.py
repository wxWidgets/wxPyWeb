#!/usr/bin/env python

"""Basic frame class, with App for testing."""

__author__ = "Patrick K. O'Brien <pobrien@orbtech.com>"
__cvsid__ = "$Id: frame.py,v 1.1 2003/07/07 15:16:33 robind Exp $"
__revision__ = "$Revision: 1.1 $"[11:-2]

import wx

class Frame(wx.Frame):
    """Frame class."""

    def __init__(self, parent=None, id=-1, title='Title',
                 pos=wx.DefaultPosition, size=(400, 200)):
        """Create a Frame instance."""
        wx.Frame.__init__(self, parent, id, title, pos, size)

class App(wx.App):
    """Application class."""

    def OnInit(self):
        self.frame = Frame()
        self.frame.Show()
        self.SetTopWindow(self.frame)
        return True

def main():
    app = App()
    app.MainLoop()

if __name__ == '__main__':
    main()

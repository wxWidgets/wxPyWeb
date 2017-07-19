# This sample is essentially the same as realworld.py except in this
# case the panel and its content, including the sizer layout
# definitions, is loaded from an XRC file.


import wx
from realworld2_xrc import xrcPANEL1

class TestFrame(wx.Frame):
    def __init__(self):
        wx.Frame.__init__(self, None, -1, "Real World Test")
        panel = xrcPANEL1(self)
        
        sizer = wx.BoxSizer()
        sizer.Add(panel, 1, wx.EXPAND)
        self.SetSizer(sizer)

        self.Fit()
        self.SetMinSize(self.GetSize())


app = wx.App()
TestFrame().Show()
app.MainLoop()

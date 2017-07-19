# ex03.py
import wx

class Frame(wx.Frame):
    def __init__(self):
        wx.Frame.__init__(self, parent=None, title="Hello World! 3")
        b1 = wx.Button(self, label="Hello", pos=(20,20))
        b2 = wx.Button(self, label="World", pos=(20,60))
        self.Bind(wx.EVT_BUTTON, self.OnHelloWorld)
        
    def OnHelloWorld(self, evt):
        print "Hello World!"

app = wx.App(redirect=True)
Frame().Show()
app.MainLoop()

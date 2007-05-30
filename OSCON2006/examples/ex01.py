# ex01.py
import wx

class App(wx.App):
    def OnInit(self):
        frame = wx.Frame(parent=None, title="Hello World! 1")
        frame.Show()
        return True

app = App()
app.MainLoop()

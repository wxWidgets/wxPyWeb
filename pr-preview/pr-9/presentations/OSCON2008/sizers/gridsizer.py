import wx
from blockwindow import BlockWindow

"""
In a GridSizer all 'cells' are the same size, which will default to
the size of the largest item, and the items are positioned within
their cells as defined by the alignment flags, if any.  This sample
shows a frame with all items being the same size, a frame in which one
item was made larger, and a frame where all items get the wx.EXPAND
flag.
"""

labels = "one two three four five six seven eight nine".split()

class TestFrame(wx.Frame):
    def __init__(self, makeLarger=False, useExpand=False):
        wx.Frame.__init__(self, None, -1, "GridSizer Test")

        if useExpand:
            flag = wx.EXPAND
        else:
            flag = 0

        # Create the sizer
        sizer = wx.GridSizer(rows=3, cols=3, hgap=5, vgap=5)

        # Create some block windows
        for label in labels:
            bw = BlockWindow(self, label=label)
            sizer.Add(bw, 0, flag)

        if makeLarger:
            center = self.FindWindowByName("five")
            center.SetMinSize((150,50))

        # Tell this window to use the sizer for layout
        self.SetSizer(sizer)

        # Change the size of the window to be the minimum
        # needed by the sizer
        self.Fit()


app = wx.PySimpleApp()

frame1 = TestFrame()
frame1.Show()
frame2 = TestFrame(True)
frame2.Show()
frame3 = TestFrame(True, True)
frame3.Show()

app.MainLoop()
